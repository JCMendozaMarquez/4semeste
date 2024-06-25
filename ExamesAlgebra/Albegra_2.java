package ExamesAlgebra;
import java.util.Scanner;

public class Albegra_2 {

	public static void main(String[] args) {
		// Variable
		int  n2,n3;
		double n1,raiz;
		double s=0;
		
		//Entrada
		Scanner teclado = new Scanner (System.in);
		System.out.print("Nuemero 1: ");
		n1 = teclado.nextInt();
		System.out.print("Nuemero 2: ");
		n2 = teclado.nextInt();
		System.out.print("Nuemero 3: ");
		n3 = teclado.nextInt(); 
	
		
		//Proceso
		s =n2+60/n1+10+n3  ;
		
		//Salida
		System.out.println("Suma+Raiz:  "+s);
		

	}

}
