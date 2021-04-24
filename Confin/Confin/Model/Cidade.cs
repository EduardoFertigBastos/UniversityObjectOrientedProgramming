using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Confin.Model
{
    class Cidade
    {
        public int cid_codigo { get; set; }
        public string nome { get; set; }
        public string est_sigla { get; set; }

        public Cidade(int cid_codigo, string nome, string est_sigla)
        {
            this.cid_codigo = cid_codigo;
            this.nome       = nome;
            this.est_sigla  = est_sigla;
        }
    }
}
