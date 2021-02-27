using System;

namespace _02_26
{
    class Program
    {
        static void Main(string[] args)
        {/*
            int diaSemana = 1;
            switch (diaSemana)
            {
                case 1:
                    Console.WriteLine("Segunda-Feira");
                    break;
                case 2:
                    Console.WriteLine("Terca-Feira");
                    break;
                case 3:
                    Console.WriteLine("Quarta-Feira");
                    break
                case 4:
                    Console.WriteLine("Quinta-Feira");
                    break;
                case 5:
                    Console.WriteLine("Sexta-Feira");
                    Console.WriteLine("Hoje e dia de balada");
                    break;
                case 6:
                    Console.WriteLine("Sabado");
                    Console.WriteLine("Hoje ainda e dia de balada");
                    break;
                case 7:
                    Console.WriteLine("Domingo");
                    break;
                default:
                    Console.WriteLine("Dia invalido");
                    break;
            }




            int i = 0;
            while (i <= 10)
            {
                Console.WriteLine("O valor de i e: " + i++);
            }
            Console.ReadKey();



            do
            {
                // conjunto de instrucoes
            } while (< condicao >);


            for (int i = 0; i < 5; i = i + 1)
            {
                Console.WriteLine("i = " + i);
            }//end for
            */

            /*
 * Vamos utilizar o condicional if para atender as seguintes especificacoes:
 * - Quando o sexo for masculino (M) imprimir:
 *    O Senhor <nome da pessoa>  e portador do rg... 
 * - Quando o sexo for feminino (F) imprimir:
 *    A Senhora <nome da pessoa> e portadora do rg ..
 * - Quando o sexo for invalido (diferente de F ou M) imprimir:
 *    O Senhor(a) <nome da pessoa> e portador(a)
 * - Quando a pessoa for CLT imprimir:
 *    esta registrado com o salario de R$ <salario>
 * - Quando a pessoa for Autonoma imprimir:
 *    foi contratado pelo valor de R$ <salario>
 */
            // Declaracao das variaveis
            /*
            String nome;
            String dataNascimento;
            String rg;
            char sexo; // UTILIZE 'M' para MASCULINO e 'F' para FEMININO
            double salario;
            bool clt;
            // Inicializacao
            nome = "Manuel da Silva";
            dataNascimento = "22/04/1980";
            rg = "29345432";
            sexo = 'M';
            salario = 2500.00;
            clt = true;
            // Impressao do texto
            String textNome;
            String textRg;
            String textNasc = "nascido em " + dataNascimento + ", ";
            String textSexo = " do sexo " + sexo + ", ";
            String textS;
            
            if (sexo == 'M') {
                textNome = "O Senhor " + nome + ", ";
                textRg = "portador do rg de numero " + rg + ", \n";
            }
            else if (sexo == 'F') {
                textNome = "A senhora " + nome + ", ";
                textRg = "portadora do rg de numero " + rg + ", \n";
            } else {
                textNome = "O senhor(a) " + nome + ", ";
                textRg = "portador(a) do rg de numero " + rg + ", \n";
            }

            if (clt) {
                textS = " esta registrado com o salario de R$ " + salario;
            } else
            {
                textS = " foi contratado pelo valor de R$ " + salario;
            }
            Console.WriteLine(textNome + textRg + textNasc + textSexo + textS);
            */
            /*
            String nome;
            String dataNascimento;
            String rg;
            char sexo; // UTILIZE 'M' para MASCULINO e 'F' para FEMININO
            double salario;
            bool clt; // Para autonomos utilize false
            nome = "Manuel da Silva";
            dataNascimento = "22/04/1980";
            rg = "29345432";
            sexo = 'M';
            salario = 2500.00;
            clt = false;

            String txtPortador = "portador(a) ";
            String txtSenhor = "O Senhor(a) ";
            String txtVinculo = "";
            switch (sexo)
            {
                case 'F':
                    txtPortador = "portadora ";
                    txtSenhor = "A Senhora ";
                    break;
                case 'M':
                    txtPortador = "portador ";
                    txtSenhor = "O Senhor ";
                    break;
            }
                
            
            if (clt == true)
            {
                txtVinculo = "esta registrado com o salario de R$ ";
            }
            else
            {
                txtVinculo = "foi contratado pelo valor de R$ ";
            }
            String textNome = txtSenhor + nome + ", ";
            String textRg = txtPortador + "do rg de numero " + rg + ", \n";
            String textNasc = "nascido em " + dataNascimento + ", ";
            String textSexo = "do sexo " + sexo + ", ";
            String textS = txtVinculo + salario;
            Console.WriteLine(textNome + textRg + textNasc + textSexo + textS);
            */
            /*
            char karakter;
            for (karakter = 'a'; karakter <= 'z'; karakter++)
            {
                Console.Write("{0} ", karakter);
            }

            int n;
            for (n = 100; n<= 200; n++)
            {
                if (n % 2 == 0)
                {
                    Console.WriteLine(n + " é divisível por 2");
                } 
                
                if (n % 3 == 0)
                {
                    Console.WriteLine(n + " é divisível por 3");
                }
                
                if ((n % 2 == 0) && (n % 3 == 0))
                {
                    Console.WriteLine(n + " é divisível por 2 e 3");
                } 
            }*/

            /*
             *
             * 1) Quantos numeros divisiveis por 6 existem entre 14 e 1578? 
             * Comprove utilizando um laco while.
             * 
             */
            int limiteInferior = 14;
            int limiteSuperior = 1578;
            // Aqui voce armazena a quantidade de numeros divisiveis por 6
            int numerosDiv6 = 0;
            // Codigo para verificar quantos numeros divisiveis por 6 existem entre o limiteInferior e o limiteSuperior
            String texto = "Quantidade de numeros divisiveis por 6 entre ";
            
            while(limiteInferior < limiteSuperior)
            {
                if (limiteInferior % 6 == 0)
                {
                    numerosDiv6 = numerosDiv6 + 1;
                }
            }

            Console.WriteLine(texto + limiteInferior + " e " + limiteSuperior + " e : " + numerosDiv6);
        }
    }
}
