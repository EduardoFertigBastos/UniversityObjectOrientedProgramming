using System;

namespace _03_12
{
    class Program
    {
        static void Main(string[] args)
        {
            /*Console.WriteLine("Hello World!");
            Produto prod = new Produto();

            prod.id         = 1;
            prod.descricao  = "Celular";
            prod.preco      = 200.50;
            prod.tamanho = 10.2;

            Console.WriteLine("ID: " + prod.id);
            Console.WriteLine("Descrição: " + prod.descricao);
            Console.WriteLine("Preço: " + prod.preco);
            Console.WriteLine("Tamanho: " + prod.tamanho);


            Console.WriteLine();

            Produto prod2 = new Produto();

            prod2.id         = 2;
            prod2.descricao  = "Camiseta";
            prod2.preco      = 50;
            prod2.tamanho = 40.2;
            
            Console.WriteLine("ID: " + prod2.id);
            Console.WriteLine("Descrição: " + prod2.descricao);
            Console.WriteLine("Preço: " + prod2.preco);
            Console.WriteLine("Tamanho: " + prod2.tamanho);*/

            Calculadora calc = new Calculadora();

            calc.soma(4, 5);
            calc.multiplicacao(4, 5);

            bool maior = calc.maior(15, 10);

            calc.print("Informação Impressa");

            Agencia ag = new Agencia();
            ag.banco  = 2;
            ag.numero = 2;


            Console.WriteLine(ag.numero + " " + ag.banco);

            Cliente c = new Cliente();
            c.nome = "Marciel";
            c.cpf = "123154";
            Console.WriteLine("------------------------------------");
            Console.WriteLine("NOME: " + c.nome + "\tCPF: " + c.cpf);
            Console.WriteLine("------------------------------------");


            Conta conta = new Conta();
            conta.agencia = 1;
            conta.banco = 234;
            conta.titular = "Marciel";
            conta.numero = "01945";
            conta.saldo = 10000;

            Console.WriteLine("-----------------------------");
            Console.WriteLine(" AGENCIA: " + conta.agencia + "\tBANCO  : " + conta.banco);
            Console.WriteLine(" NUMERO : " + conta.numero);
            Console.WriteLine(" TITULAR: " + conta.titular);
            Console.WriteLine(" SALDO  : R$" + conta.saldo);
            Console.WriteLine("-----------------------------");


            Agencia a = new Agencia();
            a.inicializaAgencia(2356, 104);
            a.imprimeDados();


            Cliente cli = new Cliente();
            cli.inicializaCliente("Marcio Prudente", "545.785.458-89");
            cli.imprimeDados();

            Conta con = new Conta();
            con.inicializaConta(1000.0, "1040-8", "João da Silva", 254, 104);
            con.imprimeDados();




        }
    }
}
