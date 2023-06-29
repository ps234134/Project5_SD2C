import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class UserAPI {
  static const String baseUrl = 'http://10.0.2.2:8000/api/';
  static Future<void> login(BuildContext context, String email, String password) async {
    // API endpoint for login
    final url = baseUrl + 'login';

    try {
      final response = await http.post(
        url,
        body: {
          'email': email,
          'password': password,
        },
      );

      if (response.statusCode == 200) {
        // Successful login
        Navigator.pushReplacementNamed(context, '/home');
      } else {
        // Handle login error
        showDialog(
          context: context,
          builder: (ctx) => AlertDialog(
            title: Text('Login Error'),
            content: Text('Invalid email or password.'),
            actions: [
              TextButton(
                onPressed: () {
                  Navigator.of(ctx).pop();
                },
                child: Text('OK'),
              ),
            ],
          ),
        );
      }
    } catch (error) {
      // Handle API request error
      showDialog(
        context: context,
        builder: (ctx) => AlertDialog(
          title: Text('Error'),
          content: Text('An error occurred while logging in.'),
          actions: [
            TextButton(
              onPressed: () {
                Navigator.of(ctx).pop();
              },
              child: Text('OK'),
            ),
          ],
        ),
      );
    }
  }
}
