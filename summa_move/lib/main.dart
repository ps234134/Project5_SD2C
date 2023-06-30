import 'package:flutter/material.dart';
import 'package:summa_move/screens/home_screen.dart';
import 'package:summa_move/screens/exercises_screen.dart';
import 'package:summa_move/screens/about_screen.dart';
import 'package:summa_move/screens/login_screen.dart';


void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Summa Move',
      theme: ThemeData(
        appBarTheme: AppBarTheme(
          backgroundColor: Color(0xFF36257A),
        ),
        drawerTheme: DrawerThemeData(
          backgroundColor: Color(0xFFFFFFFF),
        ),
      ),
      home: HomeScreen(),
      routes: {
        HomeScreen.routeName: (ctx) => HomeScreen(),
        AboutScreen.routeName: (ctx) => AboutScreen(),
        LoginScreen.routeName: (ctx) => LoginScreen(),
      },
    );
  }
}
