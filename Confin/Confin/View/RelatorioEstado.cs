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
    public partial class RelatorioEstado : Form
    {
        public RelatorioEstado()
        {
            InitializeComponent();
        }

        private void RelatorioEstado_Load(object sender, EventArgs e)
        {
            List<Estado> lista = EstadoDB.getEstados();
            EstadoBindingSource.DataSource = lista;
            
            this.reportViewer1.SetDisplayMode(Microsoft.Reporting.WinForms.DisplayMode.PrintLayout);
            this.reportViewer1.ZoomMode = Microsoft.Reporting.WinForms.ZoomMode.PageWidth;
            this.reportViewer1.RefreshReport();
        }

        private void reportViewer1_Load(object sender, EventArgs e)
        {

        }
    }
}
