package inf100;

import java.util.Scanner;

public class Ejercicio2 {

	public static void main(String[] args) {
		
		int N,X,s,exp,imp,par,fact,j;
		double z;
		s=0;
		exp=3;
		imp=3;
		par=2;
		z=0;
		fact=1;
        Scanner teclado = new Scanner (System.in);
        
		System.out.print("Int N: ");
		N= teclado.nextInt();
		
		System.out.print("Int X: ");
		X= teclado.nextInt();
		for(int i=1; i<=N;i++ ) {
			fact=1;
			for( j=1;j<=par;j++);
			fact=fact*j;
		}
		z=z+X*exp/fact;
		exp=exp+imp;
		imp=imp+2;
		par=par+2;
	}
	
	

	}


