import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';
import 'package:summa_move/classes/User.dart';


class UserAPI {
  static const String baseUrl = 'http://10.0.2.2:8000/api/';

  static Future<void> login(BuildContext context, String email, String password) async {
    final url = Uri.parse(baseUrl + 'login');

    try {
      final response = await http.post(
        url,
        body: {
          'email': email,
          'password': password,
        },
      );

      if (response.statusCode == 200) {
        User.loggedIn = true;     // Set loggedIn to true
        Navigator.pushReplacementNamed(context, '/home');
      } else {
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
  static Future<void> logout(BuildContext context) async {
    final url = Uri.parse(baseUrl + 'logout');

    try {
      final response = await http.post(url);

      if (response.statusCode == 200) {
        User.loggedIn = false; // Set loggedIn to false upon successful logout
        Navigator.pushReplacementNamed(context, '/login');
      } else {
        showDialog(
          context: context,
          builder: (ctx) => AlertDialog(
            title: Text('Logout Error'),
            content: Text('An error occurred while logging out.'),
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
      showDialog(
        context: context,
        builder: (ctx) => AlertDialog(
          title: Text('Error'),
          content: Text('An error occurred while logging out.'),
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
