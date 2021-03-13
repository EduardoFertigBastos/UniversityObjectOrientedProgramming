using System;
using System.Collections.Generic;
using System.Text;

namespace _03_12
{
    class Cliente
    {
        public String nome;
        public String cpf;

        /**
         * @param nomeCliente
         *            nome do cliente
         * @param cpfCliente
         *            cpf do cliente
         */
        public void inicializaCliente(String nomeCliente, String cpfCliente)
        {
            cpf = cpfCliente;
            nome = nomeCliente;
        }

        /**
         * Metodo para impressao de todos os dados da classe
         */
        public void imprimeDados()
        {
            Console.WriteLine("----------------------");
            Console.WriteLine("Nome do cliente :" + nome);
            Console.WriteLine("CPF:" + cpf);
            Console.WriteLine("----------------------");
        }

    }
}
