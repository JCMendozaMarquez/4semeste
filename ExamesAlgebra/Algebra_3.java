package ExamesAlgebra;

import java.util.Scanner;

public class Algebra_3 {

	public static void main(String[] args) {
		//Variable
		int  n1,n2;
		double z;
		
		//Entrada
		Scanner teclado = new Scanner (System.in);
		System.out.print("Nuemero 1: ");
		n1 = teclado.nextInt();
		System.out.print("Nuemero 2: ");
		n2 = teclado.nextInt();
		System.out.print("Int z: ");
     	z = teclado.nextInt();
		
	
		//Proceso
		z=n1 + n1^n2 + n1^n2 ;
		
		//Salida
		System.out.println("Suma : "+z);
		
	}

}
