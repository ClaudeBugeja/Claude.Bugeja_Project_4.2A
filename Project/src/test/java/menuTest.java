/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import org.junit.After;
import org.junit.AfterClass;
import org.junit.Before;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author User
 */
public class menuTest {
    
    public menuTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }
    
    /*@Before
    public void setUp() {
    }
    
    @After
    public void tearDown() {
    }*/

    /**
     * Test of Login method, of class menu.
     */
   /* @org.junit.Test
    public boolean testLogin() {
        System.out.println("Login");
        menu instance = new menu();
        instance.Login();
        fail("The test case is a prototype.");
        return false;
    }*/
    
     /**
     * Test of main method, of class menu.
     */
    /*@org.junit.Test
    public void testMain() {
        System.out.println("main");
        String[] args = null;
        menu.main(args);
       
        //fail("The test case is a prototype.");
    }*/

    @org.junit.Test
    public void testDisplay() {
        System.out.println("Display");
        Manager instance = new Manager();
        instance.Display();
        boolean expResult = true;
        boolean result = instance.Display();
        assertEquals(expResult, result);
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testconnectGUI() {
        System.out.println("Display");
        Manager_User instance = new Manager_User();
        instance.Display();
        boolean expResult = true;
        boolean result = instance.Display();
        assertEquals(expResult, result);
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testConfirmationManager() {
        System.out.println("ConfirmationM");
        menu instance = new menu();
        Object expResult = "Hello Manager";
        Object result = instance.ConfirmationManager();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testConfirmationEmployee() {
        System.out.println("ConfirmationE");
        menu instance = new menu();
        Object expResult = "Hello employee";
        Object result = instance.ConfirmationEmployee();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testWelcomeEmployee() {
        System.out.println("WelcomeE");
        menu instance = new menu();
        Object expResult = "Welcome to the product's database";
        Object result = instance.WelcomeEmployee();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testWelcomeManager() {
        System.out.println("WelcomeM");
        menu instance = new menu();
        Object expResult = "Welcome to your menu";
        Object result = instance.WelcomeManager();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
   @org.junit.Test
    public void testUpdateSuccessfull() {
        System.out.println("Update Successfull");
        Update instance = new Update();
        Object expResult = "Updates were successfully impleneted in the database";
        Object result = instance.UpdateSuccessfull();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testDeleteSuccessfull() {
        System.out.println("Delete Successfull");
        Delete instance = new Delete();
        Object expResult = "Product selected was successfully removed from the database";
        Object result = instance.DeleteSuccessfull();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testInsertSuccessfull() {
        System.out.println("Insert Successfull");
        Insert instance = new Insert();
        Object expResult = "Product successfully inserted into the database";
        Object result = instance.InsertSuccessfull();
        assertEquals(expResult, result);
        // TODO review the generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
    @org.junit.Test
    public void testUserData() {
        System.out.println("User Data");
        Manager_Menu instance = new Manager_Menu();
        Object expResult = "You are in your user's details database";
        Object result = instance.UserData();
        assertEquals(expResult, result);
        // TODO review thes generated test code and remove the default call to fail.
        //fail("The test case is a prototype.");
    }
    
   
    
}
