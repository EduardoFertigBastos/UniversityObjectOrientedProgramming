using Confin.Controller;
using Confin.model;
using Npgsql;
using System;
using System.Collections.Generic;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Confin
{
    public partial class frmPrincipal : Form
    {
        public frmPrincipal()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void Form1_Load_1(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            NpgsqlConnection conexao = Conexao.getConexao();
            
            if(conexao!= null)
            {
                MessageBox.Show("Conexão ok!");
            }
            
            conexao.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            List<Estado> lista = EstadoDB.getEstados();
            richTextBox1.Clear();

            for (int i = 0; i < lista.Count; i++)
            {
                Estado estado = lista[i];
                richTextBox1.AppendText("Sigla: " + estado.est_sigla + 
                                        "\n Nome: " + estado.nome + "\n\n");
            }
        }

        private void richTextBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            Estado estado = new Estado("TO", "Tocantins");
            bool efetuou = EstadoDB.setIncluiEstado(estado);

            if (efetuou)
            {
                MessageBox.Show("INSERIU PORRA");
            }
            else
            {
                MessageBox.Show("Erro ao inserir, parça");
            }
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            Estado estado = new Estado("PR", "Tocantins");
            bool efetuou = EstadoDB.setAlteraEstado(estado);

            if (efetuou)
            {
                MessageBox.Show("ALTEROU PORRA");
            }
            else
            {
                MessageBox.Show("Erro ao alterar, parça");
            }
        }

        private void Deletar_Click(object sender, EventArgs e)
        {
            string sigla = "TO";
            bool efetuou = EstadoDB.setDeletaEstado(sigla);

            if (efetuou)
            {
                MessageBox.Show("DELETOU PORRA");
            }
            else
            {
                MessageBox.Show("Erro ao deletar, parça");
            }
        }
    }
}
