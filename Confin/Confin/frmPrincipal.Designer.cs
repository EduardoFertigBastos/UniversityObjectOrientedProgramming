
namespace Confin
{
    partial class frmPrincipal
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.conexao = new System.Windows.Forms.Button();
            this.SELECT = new System.Windows.Forms.Button();
            this.richTextBox1 = new System.Windows.Forms.RichTextBox();
            this.inclui = new System.Windows.Forms.Button();
            this.Alterar = new System.Windows.Forms.Button();
            this.Deletar = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // conexao
            // 
            this.conexao.Location = new System.Drawing.Point(558, 208);
            this.conexao.Name = "conexao";
            this.conexao.Size = new System.Drawing.Size(75, 23);
            this.conexao.TabIndex = 0;
            this.conexao.Text = "Conexao";
            this.conexao.UseVisualStyleBackColor = true;
            this.conexao.Click += new System.EventHandler(this.button1_Click);
            // 
            // SELECT
            // 
            this.SELECT.Location = new System.Drawing.Point(559, 237);
            this.SELECT.Name = "SELECT";
            this.SELECT.Size = new System.Drawing.Size(75, 23);
            this.SELECT.TabIndex = 1;
            this.SELECT.Text = "Executar";
            this.SELECT.UseVisualStyleBackColor = true;
            this.SELECT.Click += new System.EventHandler(this.button2_Click);
            // 
            // richTextBox1
            // 
            this.richTextBox1.Location = new System.Drawing.Point(12, 12);
            this.richTextBox1.Name = "richTextBox1";
            this.richTextBox1.Size = new System.Drawing.Size(540, 335);
            this.richTextBox1.TabIndex = 2;
            this.richTextBox1.Text = "";
            this.richTextBox1.TextChanged += new System.EventHandler(this.richTextBox1_TextChanged);
            // 
            // inclui
            // 
            this.inclui.Location = new System.Drawing.Point(558, 266);
            this.inclui.Name = "inclui";
            this.inclui.Size = new System.Drawing.Size(75, 23);
            this.inclui.TabIndex = 3;
            this.inclui.Text = "Incluir";
            this.inclui.UseVisualStyleBackColor = true;
            this.inclui.Click += new System.EventHandler(this.button3_Click);
            // 
            // Alterar
            // 
            this.Alterar.Location = new System.Drawing.Point(558, 295);
            this.Alterar.Name = "Alterar";
            this.Alterar.Size = new System.Drawing.Size(75, 23);
            this.Alterar.TabIndex = 4;
            this.Alterar.Text = "Alterar";
            this.Alterar.UseVisualStyleBackColor = true;
            this.Alterar.Click += new System.EventHandler(this.button1_Click_1);
            // 
            // Deletar
            // 
            this.Deletar.Location = new System.Drawing.Point(559, 324);
            this.Deletar.Name = "Deletar";
            this.Deletar.Size = new System.Drawing.Size(75, 23);
            this.Deletar.TabIndex = 5;
            this.Deletar.Text = "Deletar";
            this.Deletar.UseVisualStyleBackColor = true;
            this.Deletar.Click += new System.EventHandler(this.Deletar_Click);
            // 
            // frmPrincipal
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.Deletar);
            this.Controls.Add(this.Alterar);
            this.Controls.Add(this.inclui);
            this.Controls.Add(this.richTextBox1);
            this.Controls.Add(this.SELECT);
            this.Controls.Add(this.conexao);
            this.Name = "frmPrincipal";
            this.Text = "ConFin - Controle Financeiro";
            this.Load += new System.EventHandler(this.Form1_Load_1);
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button conexao;
        private System.Windows.Forms.Button SELECT;
        private System.Windows.Forms.RichTextBox richTextBox1;
        private System.Windows.Forms.Button inclui;
        private System.Windows.Forms.Button Alterar;
        private System.Windows.Forms.Button Deletar;
    }
}

