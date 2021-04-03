using Npgsql;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Confin.Controller
{
    public class Conexao
    {
        public static NpgsqlConnection getConexao()
        {
            NpgsqlConnection conexao = null;

            try
            {
                conexao = new NpgsqlConnection("Server=localhost; Port=5433; User Id=postgres; Password=EuEduardo2001; Database=financeiro;");
                conexao.Open();

            }
            catch(NpgsqlException erro)
            {
                Console.WriteLine("Erro de conexão: " + erro.Message);
            }

            return conexao;

        }
    }
}
