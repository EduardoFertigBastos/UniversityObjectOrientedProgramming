using Confin.model;
using Npgsql;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Confin.Controller
{
    public class EstadoDB
    {
        public static List<Estado> getEstados()
        {
            List<Estado> lista = new List<Estado>();

            try
            {
                NpgsqlConnection conexao = Conexao.getConexao();

                string sql = "SELECT * " +
                               "FROM estado";
                
                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);

                NpgsqlDataReader data = cmd.ExecuteReader();

                while(data.Read())
                {
                    string nome  = (string) data["nome"];
                    string sigla = (string) data["est_sigla"];

                    Estado estado = new Estado(sigla, nome);
                    lista.Add(estado);
                }

                data.Close();
                conexao.Close();

            }
            catch (NpgsqlException erro)
            {
                MessageBox.Show("Erro de SQL: " + erro.Message);
            }

            return lista;
        }

        public static bool setIncluiEstado(Estado estado)
        {
            bool efetuou = false;

            try
            {

                NpgsqlConnection conexao = Conexao.getConexao();

                string sql = "INSERT INTO estado (est_sigla, nome) " +
                                     "VALUES (@sigla, @nome)";

                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);
                cmd.Parameters.Add("@sigla", NpgsqlTypes.NpgsqlDbType.Varchar).Value = estado.est_sigla;
                cmd.Parameters.Add("@nome",  NpgsqlTypes.NpgsqlDbType.Varchar).Value = estado.nome;

                int inseriu = cmd.ExecuteNonQuery();

                if (inseriu == 1)
                {
                    efetuou = true;
                }

                conexao.Close();
            } catch(NpgsqlException erro)
            {
                MessageBox.Show("Erro de SQL: " + erro.Message);
            }

            return efetuou;
        }
        public static bool setAlteraEstado(Estado estado)
        {
            bool efetuou = false;

            try
            {

                NpgsqlConnection conexao = Conexao.getConexao();

                string sql = "UPDATE estado "               +
                                "SET nome = @nome "          +
                              "WHERE est_sigla = @sigla";

                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);
                cmd.Parameters.Add("@sigla", NpgsqlTypes.NpgsqlDbType.Varchar).Value = estado.est_sigla;
                cmd.Parameters.Add("@nome",  NpgsqlTypes.NpgsqlDbType.Varchar).Value = estado.nome;

                int alterou = cmd.ExecuteNonQuery();

                if (alterou == 1)
                {
                    efetuou = true;
                }

                conexao.Close();
            } catch(NpgsqlException erro)
            {
                MessageBox.Show("Erro de SQL: " + erro.Message);
            }

            return efetuou;
        }
        public static bool setDeletaEstado(string sigla)
        {
            bool efetuou = false;

            try
            {

                NpgsqlConnection conexao = Conexao.getConexao();

                string sql = "DELETE " +
                               "FROM estado " +
                              "WHERE est_sigla = @sigla";

                NpgsqlCommand cmd = new NpgsqlCommand(sql, conexao);
                cmd.Parameters.Add("@sigla", NpgsqlTypes.NpgsqlDbType.Varchar).Value = sigla;

                int deletou = cmd.ExecuteNonQuery();

                if (deletou == 1)
                {
                    efetuou = true;
                }

                conexao.Close();
            } catch(NpgsqlException erro)
            {
                MessageBox.Show("Erro de SQL: " + erro.Message);
            }

            return efetuou;
        }
    }
}
