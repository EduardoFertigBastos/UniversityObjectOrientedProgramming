using System;
using System.Runtime.Intrinsics.X86;

namespace Aula
{
    class Program
    {
        static void Main(string[] args)
        {
            /*char    sSexo;
            double  iSalario;
            string  sNome;
            string  sNasc;
            string  sRG;

            Console.WriteLine("Informe o seu Nome.");
            sNome = Console.ReadLine();

            Console.WriteLine("Informe a sua Data de Nascimento.");
            sNasc = Console.ReadLine();
            
            Console.WriteLine("Informe o seu RG.");
            sRG = Console.ReadLine();
            
            Console.WriteLine("Informe o seu Sexo (M ou F).");
            sSexo = Char.Parse(Console.ReadLine());
            
            Console.WriteLine("Informe o seu Salário.");
            iSalario = Double.Parse(Console.ReadLine());

            Console.WriteLine("O Senhor(a) " + sNome + ", portador(a) do RG de número " + sRG + "," +
                "\nnascido em " + sNasc + ", do sexo " + sSexo + ", está registrado com " +
                "\no salário de R$ " + iSalario + ".");
            Console.ReadKey();
            */
            /*
            bool ok = true;

            Console.WriteLine("OK = " + ok);

            bool notOk = !ok;
            Console.WriteLine("notOK = " + notOk);

            Console.ReadKey();

            int y = 5;
            int x = 4;
            Console.WriteLine("Valor y = " + y++);
            Console.WriteLine("Valor x = " + x++);
            Console.WriteLine("Valor y = " + y++ + x++);

            Console.WriteLine("Valor y = " + ++y);
            Console.WriteLine("Valor x = " + ++x);
            Console.WriteLine("Valor y = " + ++y + ++x);

            double d = 125;
            Console.WriteLine("jnt 125 convertido automaticamente p/ double=" + d);
            char c = (char)2154;
            Console.WriteLine("literal 2154(int) convertido explicitamente p/ char=" + c);
            short s = (short)'a';
            Console.WriteLine("char 'a' convertido explicitamente p/ short=" + s);
            byte b = (byte)'a';
            Console.WriteLine("char 'a' (literal) convertido explicitamente p/ byte=" + b);
            int i = (int)5658.0f;
            Console.WriteLine("float 5658.0f convertido explicitamente p/ int=" + i);
            Console.ReadKey();
            */
            /*
            int inteiro = 12;
            char caracter = 'f';
            long numeroLong = 901;
            float numeroFloat = 990.99f;
            double numeroDouble = 90.98;
            Console.WriteLine("caracter = " + caracter);
            Console.WriteLine("inteiro = " + inteiro);
            Console.WriteLine("numeroLong = " + numeroLong);
            Console.WriteLine("numeroFloat = " + numeroFloat);
            Console.WriteLine("numeroDouble = " + numeroDouble);

            //upcasting – casting implicito (char para int);
            inteiro = caracter;
            Console.WriteLine("caracter 'f' sendo visto como inteiro =" + inteiro);
            //downcasting - casting tem que ser explicito (float para int)
            inteiro = (int)numeroFloat;
            Console.WriteLine("float 990.99f sendo visto como inteiro =" + inteiro);
            //downcasting - casting tem que ser explicito (int para byte)
            byte b = (byte)inteiro;
            Console.WriteLine("inteiro " + inteiro + " sendo visto como byte =" + b);
            */
            /*
            int num1 = 2;
            int num2 = 3;
            int num3 = 2;
            bool diferente = (num1 != num2);
            Console.WriteLine(num1 + "!=" + num2 + " : " + diferente);
            bool igual = (num1 == num3);
            Console.WriteLine(num1 + "==" + num3 + " : " + igual);
            bool iguais = (num2 <= num3);
            Console.WriteLine(num2 + "<=" + num3 + " : " + iguais);
            Console.ReadKey();
            */
            /*
            int x = 9;
            int y = 0;
            if (x > y && x > 0)
            {
                Console.WriteLine("x > y e x > 0");
            }
            if (y == 0 || x == 0)
            {
                Console.WriteLine("Um dos dois é igual a zero");
            }
            Console.ReadKey();
            */

            /*
            int n1 = 2;
            n1 *= 12; //n1 = n1 * 12;
            Console.WriteLine(n1);
            n1 = 4;
            n1 += 4; //n1 = n1 + 4;
            Console.WriteLine(n1);
            n1 = 9;
            n1 /= 3; //n1 = n1 / 3;
            Console.WriteLine(n1);
            n1 = 5;
            n1 -= 5; //n1 = n1 - 5;
            Console.WriteLine(n1);
            Console.ReadKey();
            */
            /*
            int a = 2;
            int b = 3;
            int c = 4;
            a = b > c ? b : c;
            */

            String mensagem = "O número é ";
            int numero = 15;
            int resto = numero % 2;
            mensagem += (resto == 0) ? " Par" : " Impar";
            Console.WriteLine(mensagem);
            Console.ReadKey();
        }

    }
}
