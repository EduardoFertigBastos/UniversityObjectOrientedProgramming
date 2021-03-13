using System;
using System.Collections.Generic;
using System.Text;

namespace _03_12
{
    class Conta
    {
        public double saldo;
        public String numero;
        public String titular;
        public int agencia;
        public int banco;

        public void inicializaConta(double saldoConta, String numeroConta, String titularConta, int agenciaConta, int bancoConta)
        {
            Console.WriteLine("Inicializando uma conta com os seguintes dados:");
            saldo = saldoConta;
            numero = numeroConta;
            titular = titularConta;
            agencia = agenciaConta;
            banco = bancoConta;
        }

        /**
         * Metodo para impressao de todos os dados da classe
         */
        public void imprimeDados()
        {
            Console.WriteLine("\n----------------------------");
            Console.WriteLine("AGENCIA:\t" + agencia + "\t BANCO:\t" + banco);
            Console.WriteLine("NUMERO: \t" + numero);
            Console.WriteLine("TITULAR: \t" + titular);
            Console.WriteLine("SALDO: \t" + saldo);
            Console.WriteLine("-----------------------------\n");
        }

    }
}
