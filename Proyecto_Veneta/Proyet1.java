package Proyecto_Veneta;

import java.util.Scanner;

public class Proyet1 {

	public static void main(String[] args) {
	
		int Suma,Resta,Mult,A,B;
		double Div;
	
		Scanner in=new Scanner (System.in);
		
		System.out.println("int.  A: ");
		A = in.nextInt();
		System.out.println("int.  B: ");
	    B = in.nextInt();
	    
	    Suma= A+B;
	    Resta=A-B;
	    Mult=A*B;
	    System.out.println("La suma es: "+Suma);
	    System.out.println("La resta es: "+Resta);
	    System.out.println("La multiplicacion es : "+Mult);
	    if(B!=0) {
    		Div=A/B;
	        System.out.println("La division es: "+Div);
	    } else{
	    	System.out.println("Nose puede realizar la operacion ");
	    	}
	    }

	}

