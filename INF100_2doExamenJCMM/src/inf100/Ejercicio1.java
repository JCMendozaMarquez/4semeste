package inf100;

import java.util.Scanner;

public class Ejercicio1 {
	  // NOMBRE COMPLETO:JUAN CARLOS MENDOZA MARQUEZ
	  // CARNET:9918137
	  // MATERIA:PROGRAMACIO N°1


	public static void main(String[] args) {
		// Desarrollo del examen
		int N, Naux1 ,Naux2,c,Aux2,Aux1;
		
		Scanner teclado = new Scanner (System.in);
		
		System.out.print("Int N: ");
		N= teclado.nextInt();
		System.out.print("Int : ");
		Naux1= teclado.nextInt();
		System.out.print("Int : ");
		Aux1= teclado.nextInt();
		
		while (Naux1!=0) {
		c=0;
		Naux2=0;
		while (N!=0) {
			Aux2=N%10;
			if(Aux1==Aux2) {
				c++;
			}else{
			Naux2=Naux2*10+Aux2;
		}
		N=N/10;
	}
}
	}

}

