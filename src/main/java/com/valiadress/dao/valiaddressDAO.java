package com.valiadress.dao;

import com.valiaddress.model.Valiaddress;
import com.valiaddress.util.DatabaseConnection;

import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ValiaddressDAO {

    // Método para insertar un nuevo registro en la base de datos
    public void insertValiaddress(Valiaddress valiaddress) throws SQLException {
        String query = "INSERT INTO valiaddress (campo1, campo2) VALUES (?, ?)";
        try (Connection connection = DatabaseConnection.getConnection();
             PreparedStatement statement = connection.prepareStatement(query)) {
            statement.setString(1, valiaddress.getCampo1());
            statement.setString(2, valiaddress.getCampo2());
            statement.executeUpdate();
        }
    }

    // Método para obtener todos los registros de la base de datos
    public List<Valiaddress> getAllValiaddresses() throws SQLException {
        List<Valiaddress> valiaddresses = new ArrayList<>();
        String query = "SELECT * FROM valiaddress";
        try (Connection connection = DatabaseConnection.getConnection();
             Statement statement = connection.createStatement();
             ResultSet resultSet = statement.executeQuery(query)) {
            while (resultSet.next()) {
                Valiaddress valiaddress = new Valiaddress();
                valiaddress.setCampo1(resultSet.getString("campo1"));
                valiaddress.setCampo2(resultSet.getString("campo2"));
                valiaddresses.add(valiaddress);
            }
        }
        return valiaddresses;
    }

    // Método para actualizar un registro existente en la base de datos
    public void updateValiaddress(Valiaddress valiaddress) throws SQLException {
        String query = "UPDATE valiaddress SET campo1 = ?, campo2 = ? WHERE id = ?";
        try (Connection connection = DatabaseConnection.getConnection();
             PreparedStatement statement = connection.prepareStatement(query)) {
            statement.setString(1, valiaddress.getCampo1());
            statement.setString(2, valiaddress.getCampo2());
            statement.setInt(3, valiaddress.getId());
            statement.executeUpdate();
        }
    }

    // Método para eliminar un registro de la base de datos
    public void deleteValiaddress(int id) throws SQLException {
        String query = "DELETE FROM valiaddress WHERE id = ?";
        try (Connection connection = DatabaseConnection.getConnection();
             PreparedStatement statement = connection.prepareStatement(query)) {
            statement.setInt(1, id);
            statement.executeUpdate();
        }
    }
}
