using Confin.Controller;
using Confin.model;
using Confin.Model;
using Confin.View;
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
            /*List<Estado> lista = EstadoDB.getEstados();
            richTextBox1.Clear();

            for (int i = 0; i < lista.Count; i++)
            {
                Estado estado = lista[i];
                richTextBox1.AppendText("Sigla: " + estado.est_sigla + 
                                        "\n Nome: " + estado.nome + "\n\n");
            }*/
            
            List<Cidade> lista = CidadeDB.getCidades();
            richTextBox1.Clear();

            for (int i = 0; i < lista.Count; i++)
            {
                Cidade cidade = lista[i];
                richTextBox1.AppendText("Código: " + cidade.cid_codigo+ 
                                        "\n" + "Estado: " + cidade.est_sigla +
                                        "\n Nome: " + cidade.nome + "\n\n");
            }
        }

        private void richTextBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            /*Estado estado = new Estado("TO", "Tocantins");
            bool efetuou = EstadoDB.setIncluiEstado(estado);

            if (efetuou)
            {
                MessageBox.Show("INSERIU PORRA");
            }
            else
            {
                MessageBox.Show("Erro ao inserir, parça");
            }*/
            Cidade cidade= new Cidade(3, "Paraguatinguentá", "SC");
            bool efetuou = CidadeDB.setIncluiCidade(cidade);

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
            /* Estado estado = new Estado("PR", "Tocantins");
             bool efetuou = EstadoDB.setAlteraEstado(estado);

             if (efetuou)
             {
                 MessageBox.Show("ALTEROU PORRA");
             }
             else
             {
                 MessageBox.Show("Erro ao alterar, parça");
             }*/

            Cidade cidade = new Cidade(1, "Aaa", "SC");
            bool efetuou = CidadeDB.setAlteraCidade(cidade);

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
            /*string sigla = "TO";
            bool efetuou = EstadoDB.setDeletaEstado(sigla);

            if (efetuou)
            {
                MessageBox.Show("DELETOU PORRA");
            }
            else
            {
                MessageBox.Show("Erro ao deletar, parça");
            }*/
            int cid_codigo = 3;
            bool efetuou = CidadeDB.setDeletaCidade(cid_codigo);

            if (efetuou)
            {
                MessageBox.Show("DELETOU PORRA");
            }
            else
            {
                MessageBox.Show("Erro ao deletar, parça");
            }
        }

        private void CadastroEstado_Click(object sender, EventArgs e)
        {
            chamaTelaEstados();
        }

        private void sairToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void estadosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            chamaTelaEstados();
        }

        private void chamaTelaEstados()
        {
            FrmEstado form = new FrmEstado();
            form.Show();
        }

        private void estadoToolStripMenuItem_Click(object sender, EventArgs e)
        {
            RelatorioEstado form = new RelatorioEstado();
            form.ShowDialog();
        }
    }
}
