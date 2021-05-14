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
    public partial class FrmEstadoNovo : Form
    {
        public FrmEstadoNovo()
        {
            InitializeComponent();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            
        }

        private void FrmEstadoNovo_Load(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void textBox2_TextChanged(object sender, EventArgs e)
        {

        }

        private void buttonCancelar_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void buttonSalvar_Click(object sender, EventArgs e)
        {
            string sigla = textBox1.Text;
            string nome  = textBox2.Text;

            Estado estado = new Estado(sigla, nome);
            bool efetuou = EstadoDB.setIncluiEstado(estado);

            if (efetuou)
            {
                MessageBox.Show("Estado incluído.");
                Close();
            }
            else
            {
                MessageBox.Show("Se fudeu, otário.");
            }
        }
    }
}
