using Confin.Model;
using Npgsql;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Confin.Controller
{
    class CidadeDB
    {
        public static List<Cidade> getCidades()
        {
            List<Cidade> lista = new List<Cidade>();
            try
            {
                NpgsqlConnection conexao = Conexao.getConexao();
                
                string sql = "SELECT *" +
                               "FROM cidade";
                
                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);
                NpgsqlDataReader reader = cmd.ExecuteReader();

                while (reader.Read())
                {
                    int codigo = reader.GetInt32(0);
                    //int codigo2 = int.Parse(reader["cid_codigo"].ToString());
                    string nome      = reader["nome"].ToString();
                    string est_sigla = reader["est_sigla"].ToString();

                    Cidade cidade = new Cidade(codigo, nome, est_sigla);
                    lista.Add(cidade);
                }
                reader.Close();
            }
            catch(NpgsqlException e)
            {
                MessageBox.Show("Erro de Sql: " + e.Message);
            }
            return lista;
        }

        public static bool setIncluiCidade(Cidade cidade)
        {
            bool efetuou = false;

            try
            {
                NpgsqlConnection conexao = Conexao.getConexao();
                string sql = "INSERT INTO cidade(cid_codigo, nome, est_sigla) " +
                                    "VALUES (@codigo, @nome, @est_sigla)";
                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);
                cmd.Parameters.Add("@codigo", NpgsqlTypes.NpgsqlDbType.Integer).Value    = cidade.cid_codigo;
                cmd.Parameters.Add("@nome", NpgsqlTypes.NpgsqlDbType.Varchar).Value      = cidade.nome;
                cmd.Parameters.Add("@est_sigla", NpgsqlTypes.NpgsqlDbType.Varchar).Value = cidade.est_sigla;

                int valor = cmd.ExecuteNonQuery();

                if (valor == 1)
                {
                    efetuou = true;
                }

                conexao.Close();
            }
            catch (NpgsqlException e)
            {
                MessageBox.Show("Erro de SQL: " + e.Message);
            }
            return efetuou;
        }

        public static bool setAlteraCidade(Cidade cidade)
        {
            bool efetuou = false;

            try
            {
                NpgsqlConnection conexao = Conexao.getConexao();

                string sql = "UPDATE cidade " +
                                "SET nome = @nome, " +
                                    "est_sigla = @sigla " +
                              "WHERE cid_codigo = @cid_codigo";

                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);
                cmd.Parameters.Add("@nome", NpgsqlTypes.NpgsqlDbType.Varchar).Value = cidade.nome;
                cmd.Parameters.Add("@sigla", NpgsqlTypes.NpgsqlDbType.Varchar).Value = cidade.est_sigla;
                cmd.Parameters.Add("@cid_codigo", NpgsqlTypes.NpgsqlDbType.Integer).Value = cidade.cid_codigo;

                int alterou = cmd.ExecuteNonQuery();

                if (alterou == 1)
                {
                    efetuou = true;
                }

                conexao.Close();
            }
            catch (NpgsqlException erro)
            {
                MessageBox.Show("Erro de SQL: " + erro.Message);
            }

            return efetuou;
        }
        public static bool setDeletaCidade(int cid_codigo)
        {
            bool efetuou = false;

            try
            {

                NpgsqlConnection conexao = Conexao.getConexao();

                string sql = "DELETE " +
                               "FROM cidade " +
                              "WHERE cid_codigo = @cidade";

                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);
                cmd.Parameters.Add("@cidade", NpgsqlTypes.NpgsqlDbType.Integer).Value = cid_codigo;

                int deletou = cmd.ExecuteNonQuery();

                if (deletou == 1)
                {
                    efetuou = true;
                }

                conexao.Close();
            }
            catch (NpgsqlException erro)
            {
                MessageBox.Show("Erro de SQL: " + erro.Message);
            }

            return efetuou;
        }
    }
}
