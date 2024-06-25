package ExamesAlgebra;
import java.util.Scanner;

public class Algebra_Intro {

	public static void main(String[] args) {
		// Variable
		int n1,n2,n3,n4;
		double w= 0;
		
		//Entrada
		Scanner teclado = new Scanner (System.in);
		System.out.print("Nuemero 1: ");
		n1 = teclado.nextInt();
		System.out.print("Nuemero 2: ");
		n2 = teclado.nextInt();
		System.out.print("Nuemero 3: ");
		n3 = teclado.nextInt(); 
		System.out.print("Nuemero 4: ");
		n4 = teclado.nextInt(); 
		
		//Porceso
		w= n1+n2/n4+n1*n3 ;
		
		//Salida
		System.out.println("Suma: "+w);
	}

}
