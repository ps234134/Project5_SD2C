import 'package:flutter/material.dart';
import 'package:summa_move/api/user_api.dart';
import 'package:summa_move/widgets/main_drawer.dart';

class RegisterScreen extends StatelessWidget {
  static const routeName = '/register';

  final nameController = TextEditingController();
  final emailController = TextEditingController();
  final passwordController = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Register'),
      ),
      drawer: MainDrawer(), // Add the drawer here
      body: Padding(
        padding: EdgeInsets.all(16),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            TextFormField(
              style: TextStyle(
                color: Color(0xFF36257A),
              ),
              controller: nameController,
              decoration: InputDecoration(
                labelText: 'Name',
              ),
            ),
            SizedBox(height: 16),
            TextFormField(
              style: TextStyle(
                color: Color(0xFF36257A),
              ),
              controller: emailController,
              decoration: InputDecoration(
                labelText: 'Email',
              ),
            ),
            SizedBox(height: 16),
            TextFormField(
              style: TextStyle(
                color: Color(0xFF36257A),
              ),
              controller: passwordController,
              obscureText: true,
              decoration: InputDecoration(
                labelText: 'Password',
              ),
            ),
            SizedBox(height: 24),
            ElevatedButton(
              style: ElevatedButton.styleFrom(
                backgroundColor: Color(0xFFD41D84),
              ),
              onPressed: () {
                String name = nameController.text;
                String email = emailController.text;
                String password = passwordController.text;
                UserAPI.register(context, name, email, password);
              },
              child: Text(
                'Register',
                style: TextStyle(
                  color: Colors.white,
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
