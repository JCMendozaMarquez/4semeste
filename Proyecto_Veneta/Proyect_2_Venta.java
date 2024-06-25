package Proyecto_Veneta;

import java.util.Scanner;

public class Proyect_2_Venta {

	public static void main(String[] args) {
		double De,Ha,La,Sh,Ct,Ct2;
		
		Scanner in=new Scanner (System.in);
		
		System.out.println("int.  Detergente: ");
	    De= in.nextDouble();
	    System.out.println("int.  Hace: ");
	    Ha= in.nextDouble();
	    System.out.println("int.  Lavadina: ");
	    La= in.nextDouble();
	    System.out.println("int.  Shampoo: ");
	    Sh= in.nextDouble();
	    
	    Ct=De+Ha+La+Sh;
	    System.out.println("La compra total es de: "+Ct);
	    if(Ct>40) {
	    	Ct2=Ct-Sh;
	    	System.out.println("La compra total es de : " +Ct2);
	    }else{
	    	
	    }
	
	}
}
