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
    }
}
