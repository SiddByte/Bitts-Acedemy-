import java.io.*;
import java.sql.*;
import java.util.*;

public class database {

    public static void main(String[] args) throws IOException, SQLException, Exeption {

        Scanner s = new Scanner(System.in);

        Class.forName("com,mysql.jdbc.Driver");
        Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/stud", "root", "");
        Statement st = con.createStatement();
        st.executeUpdate("insert into std values(1,'aa')");

        ResultSet rs = st.executeQuery("select *from std");

        while (rs.next()) {
            System.out.print(rs.getInt(1) + rs.getString(2));
            System.out.print();
        }
        con.close();
    }
}
