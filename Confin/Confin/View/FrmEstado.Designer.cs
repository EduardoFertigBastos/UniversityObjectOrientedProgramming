
namespace Confin.View
{
    partial class FrmEstado
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FrmEstado));
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.est_sigla = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.nome = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.Novo = new System.Windows.Forms.Button();
            this.Alterar = new System.Windows.Forms.Button();
            this.Excluir = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView1
            // 
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.est_sigla,
            this.nome});
            this.dataGridView1.Location = new System.Drawing.Point(12, 12);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dataGridView1.Size = new System.Drawing.Size(362, 284);
            this.dataGridView1.TabIndex = 0;
            this.dataGridView1.CellContentClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridView1_CellContentClick);
            // 
            // est_sigla
            // 
            this.est_sigla.DataPropertyName = "est_sigla";
            this.est_sigla.HeaderText = "Sigla";
            this.est_sigla.Name = "est_sigla";
            // 
            // nome
            // 
            this.nome.DataPropertyName = "nome";
            this.nome.HeaderText = "Nome";
            this.nome.Name = "nome";
            // 
            // Novo
            // 
            this.Novo.Location = new System.Drawing.Point(380, 12);
            this.Novo.Name = "Novo";
            this.Novo.Size = new System.Drawing.Size(68, 23);
            this.Novo.TabIndex = 1;
            this.Novo.Text = "Novo";
            this.Novo.UseVisualStyleBackColor = true;
            this.Novo.Click += new System.EventHandler(this.Novo_Click);
            // 
            // Alterar
            // 
            this.Alterar.Location = new System.Drawing.Point(380, 41);
            this.Alterar.Name = "Alterar";
            this.Alterar.Size = new System.Drawing.Size(68, 23);
            this.Alterar.TabIndex = 2;
            this.Alterar.Text = "Alterar";
            this.Alterar.UseVisualStyleBackColor = true;
            this.Alterar.Click += new System.EventHandler(this.Alterar_Click);
            // 
            // Excluir
            // 
            this.Excluir.Location = new System.Drawing.Point(380, 70);
            this.Excluir.Name = "Excluir";
            this.Excluir.Size = new System.Drawing.Size(68, 23);
            this.Excluir.TabIndex = 3;
            this.Excluir.Text = "Excluir";
            this.Excluir.UseVisualStyleBackColor = true;
            this.Excluir.Click += new System.EventHandler(this.Excluir_Click);
            // 
            // FrmEstado
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(451, 308);
            this.Controls.Add(this.Excluir);
            this.Controls.Add(this.Alterar);
            this.Controls.Add(this.Novo);
            this.Controls.Add(this.dataGridView1);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "FrmEstado";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Cadastro de Estados";
            this.Load += new System.EventHandler(this.FrmEstado_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.DataGridViewTextBoxColumn est_sigla;
        private System.Windows.Forms.DataGridViewTextBoxColumn nome;
        private System.Windows.Forms.Button Novo;
        private System.Windows.Forms.Button Alterar;
        private System.Windows.Forms.Button Excluir;
    }
}