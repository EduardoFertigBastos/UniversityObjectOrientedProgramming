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
    public partial class FrmAlterarEstado : Form
    {
        Estado estado = null;
        public FrmAlterarEstado(Estado estado)
        {
            this.estado = estado;
            InitializeComponent();
            textBox1.Text = this.estado.est_sigla;
            textBox2.Text = this.estado.nome;
        }

        private void buttonSalvar_Click(object sender, EventArgs e)
        {
            estado.nome = textBox2.Text;
            bool efetuou = EstadoDB.setAlteraEstado(estado);

            if (efetuou)
            {
                MessageBox.Show("Deu bom, mané");
                Close();
            }
            else
            {
                MessageBox.Show("AAAAAAA");
            }
        }

        private void buttonCancelar_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void FrmAlterarEstado_Load(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
