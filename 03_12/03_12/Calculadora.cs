using System;
using System.Collections.Generic;
using System.Text;

namespace _03_12
{
    class Calculadora
    {
        //a passagem de dois valores do tipo int (ou tipo compativel) e obrigatoria
        public int soma(int x, int y)
        {
            return x + y;
        }
        //a passagem de dois valores do tipo double (ou tipo compativel) e orbigatoria
        public double multiplicacao(double d1, double d2)
        {
            double resultado = d1 * d2;
            return resultado;
        }
        public bool maior(int num1, int num2)
        {
            if (num1 > num2)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        //a passagem de um parametro do tipo String e obrigatoria
        public void print(String texto)
        {
            Console.WriteLine("Texto: " + texto);
        }
    }
}
