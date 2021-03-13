using System;
using System.Collections.Generic;
using System.Text;

namespace _03_12
{
    class Agencia
    {
        public int numero;
        public int banco;

        /**
         * @param numeroAgencia
         *            numero da agencia
         * @param bancoAgencia
         *            banco ao qual a agencia pertence
         */
        public void inicializaAgencia(int numeroAgencia, int bancoAgencia)
        {
            Console.WriteLine("Inicializando uma agencia com os seguintes dados:");
            numero = numeroAgencia;
            banco = bancoAgencia;
        }

         /**
         * Metodo para impressao de todos os dados da classe
         */
        public void imprimeDados()
        {
            Console.WriteLine("----------------------");
            Console.WriteLine("Agencia no. " + numero);
            Console.WriteLine("Banco no." + banco);
            Console.WriteLine("----------------------");
        }

    }
}
