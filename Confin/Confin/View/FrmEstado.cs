using Confin.Controller;
using Confin.model;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Confin.View
{
    public partial class FrmEstado : Form
    {
        public FrmEstado()
        {
            InitializeComponent();
            atualizaTela();
        }

        private void FrmEstado_Load(object sender, EventArgs e)
        {

        }

        private void atualizaTela()
        {
            List<Estado> lista = EstadoDB.getEstados();
            dataGridView1.DataSource = lista;
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void Novo_Click(object sender, EventArgs e)
        {
            FrmEstadoNovo form = new FrmEstadoNovo();
            form.ShowDialog();
            atualizaTela();
        }

        private void Alterar_Click(object sender, EventArgs e)
        {
            Estado estado = (Estado) dataGridView1.CurrentRow.DataBoundItem;
            FrmAlterarEstado form = new FrmAlterarEstado(estado);
            form.ShowDialog();
            atualizaTela();
        }

        private void Excluir_Click(object sender, EventArgs e)
        {

            Estado estado = (Estado)dataGridView1.CurrentRow.DataBoundItem;

            DialogResult result = MessageBox.Show(
                null,
                "Deseja excluir estado "+ estado.est_sigla + "?",
                "Estado",
                MessageBoxButtons.OKCancel,
                MessageBoxIcon.Question
            );

            if (result == DialogResult.OK)
            {

                bool efetuou = EstadoDB.setDeletaEstado(estado.est_sigla);
                if (efetuou)
                {
                    MessageBox.Show("Rs");
                }
                else
                {
                    MessageBox.Show("RSRSRS");
                }
                atualizaTela();
            }
        }
    }
}
