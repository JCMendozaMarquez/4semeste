package Proyecto_Fase1;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Font;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JTextField;

public class Operacion_productos extends JFrame {

	private JPanel contentPane;
	private JTextField txtHac;
	private JTextField txtDet;
	private JTextField txtLav;
	private JTextField txtSha;
	private JTextField txtCTL;
	private JTextField txtCli;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Operacion_productos frame = new Operacion_productos();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Operacion_productos() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 355, 461);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblTitulo = new JLabel("Tienda Calamardo");
		lblTitulo.setFont(new Font("Tahoma", Font.PLAIN, 18));
		lblTitulo.setBounds(72, 11, 187, 22);
		contentPane.add(lblTitulo);
		
		txtHac = new JTextField();
		txtHac.setBounds(105, 153, 86, 20);
		contentPane.add(txtHac);
		txtHac.setColumns(10);
		
		txtDet = new JTextField();
		txtDet.setColumns(10);
		txtDet.setBounds(105, 184, 86, 22);
		contentPane.add(txtDet);
		
		txtLav = new JTextField();
		txtLav.setColumns(10);
		txtLav.setBounds(105, 217, 86, 22);
		contentPane.add(txtLav);
		
		txtSha = new JTextField();
		txtSha.setColumns(10);
		txtSha.setBounds(105, 250, 86, 22);
		contentPane.add(txtSha);
		
		JLabel lblHace = new JLabel("Producto Hace:");
		lblHace.setFont(new Font("Tahoma", Font.PLAIN, 10));
		lblHace.setBounds(10, 158, 86, 20);
		contentPane.add(lblHace);
		
		JLabel lblProductoDertergente = new JLabel("Producto Dertergente:");
		lblProductoDertergente.setFont(new Font("Tahoma", Font.PLAIN, 9));
		lblProductoDertergente.setBounds(10, 189, 97, 20);
		contentPane.add(lblProductoDertergente);
		
		JLabel lblProductoLavandina = new JLabel("Producto Lavandina:");
		lblProductoLavandina.setFont(new Font("Tahoma", Font.PLAIN, 10));
		lblProductoLavandina.setBounds(10, 220, 96, 20);
		contentPane.add(lblProductoLavandina);
		
		JLabel lblProductoShampoo = new JLabel("Producto Shampoo:");
		lblProductoShampoo.setFont(new Font("Tahoma", Font.PLAIN, 10));
		lblProductoShampoo.setBounds(10, 251, 96, 20);
		contentPane.add(lblProductoShampoo);
		
		JButton btnLimpiar = new JButton("Limpiar");
		btnLimpiar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				txtCli.setText(null);
		    	txtHac.setText("0");
		    	txtDet.setText("0");
				txtLav.setText("0");
				txtSha.setText("0");
				txtCTL.setText("0");
			}
		});
		btnLimpiar.setFont(new Font("Tahoma", Font.PLAIN, 12));
		btnLimpiar.setBounds(9, 397, 119, 14);
		contentPane.add(btnLimpiar);
		
		JButton btnSalir = new JButton("Salir");
		btnSalir.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				System.exit(0);
			}
		});
		btnSalir.setFont(new Font("Tahoma", Font.PLAIN, 12));
		btnSalir.setBounds(181, 394, 119, 14);
		contentPane.add(btnSalir);
		
		JButton btnOperacion = new JButton("Operacion");
		btnOperacion.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				double De,Ha,La,Sh;//Entradas
				String Clt,CT2;
				CT2=" ";
				double CT;
				
		       Clt=txtCli.getText();
				Ha=Double.parseDouble(txtHac.getText());
				De=Double.parseDouble(txtDet.getText());
				La=Double.parseDouble(txtLav.getText());
				Sh=Double.parseDouble(txtSha.getText());
			    CT=De+Ha+La+Sh;
			    if(CT==0) {
			    	CT2="Devolución";
			    	txtCTL.setText(CT2);
			    }else {
			    	txtCTL.setText(Double.toString(CT));
			    }
				
				System.out.print("Costo Total de Venta :"+CT);
				
				txtCli.setText(Clt);
		    	txtHac.setText(Double.toString(Ha));
		    	txtDet.setText(Double.toString(De));
				txtLav.setText(Double.toString(La));
				txtSha.setText(Double.toString(Sh));
				
				
				
					
			}
			
		});
		btnOperacion.setFont(new Font("Tahoma", Font.PLAIN, 12));
		btnOperacion.setBounds(210, 60, 119, 14);
		contentPane.add(btnOperacion);
		
		JLabel lblTotalProductos = new JLabel(" Productos         Costo");
		lblTotalProductos.setFont(new Font("Tahoma", Font.PLAIN, 14));
		lblTotalProductos.setBounds(10, 44, 155, 20);
		contentPane.add(lblTotalProductos);
		
		txtCTL = new JTextField();
		txtCTL.setColumns(10);
		txtCTL.setBounds(105, 283, 103, 29);
		contentPane.add(txtCTL);
		
		JLabel lblCostoTotal = new JLabel("Costo  Total :");
		lblCostoTotal.setFont(new Font("Tahoma", Font.PLAIN, 14));
		lblCostoTotal.setBounds(9, 285, 96, 20);
		contentPane.add(lblCostoTotal);
		
		txtCli = new JTextField();
		txtCli.setFont(new Font("Tahoma", Font.PLAIN, 12));
		txtCli.setColumns(10);
		txtCli.setBounds(84, 106, 154, 21);
		contentPane.add(txtCli);
		
		JLabel lblCliente = new JLabel("Cliente      :");
		lblCliente.setFont(new Font("Tahoma", Font.PLAIN, 12));
		lblCliente.setBounds(10, 106, 86, 20);
		contentPane.add(lblCliente);
	}
}
