package com.valiadress.util;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;                                                                                
import java.sql.SQLException;
import java.sql.Statement;

public class DatabaseConnection {
    private static final String URL = "jdbc:mysql://localhost:3306/registro_usuarios_bd";
    private static final String USER = "root";
    private static final String PASSWORD = "";

    public static void main(String[] args) {
        try {
            // Establecer la conexión
            Connection con = DriverManager.getConnection(URL, USER, PASSWORD);
            System.out.println("Conexión exitosa a la base de datos.");

            Statement stmt = con.createStatement();

            // Ejecutar la consulta
            String query = "SELECT * FROM datos";
            ResultSet rs = stmt.executeQuery(query);
            System.out.println("Consulta ejecutada exitosamente.");

            // Procesar los resultados
            while (rs.next()) {
                int id = rs.getInt("id");
                String nombres = rs.getString("Nombres");
                String apellidos = rs.getString("Apellidos");
                String identificacion = rs.getString("Identificacion");
                String telefono = rs.getString("Telefono");
                String correo = rs.getString("Correo");
                String contrasena = rs.getString("Contrasena");
                String confirmarContrasena = rs.getString("confirmar_contrasena");

                System.out.println("ID: " + id);
                System.out.println("Nombres: " + nombres);
                System.out.println("Apellidos: " + apellidos);
                System.out.println("Identificación: " + identificacion);
                System.out.println("Teléfono: " + telefono);
                System.out.println("Correo: " + correo);
                System.out.println("Contraseña: " + contrasena);
                System.out.println("Confirmar Contraseña: " + confirmarContrasena);
                System.out.println("-------------------------");
            }

            // Cerrar la conexión
            rs.close();
            stmt.close();
            con.close();
            System.out.println("Conexión cerrada.");
        } catch (SQLException e) {
            System.out.println("Error al conectar a la base de datos.");
            e.printStackTrace();
        }
    }
}
