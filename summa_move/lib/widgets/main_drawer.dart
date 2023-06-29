import 'package:flutter/material.dart';
import 'package:summa_move/screens/home_screen.dart';
import 'package:summa_move/screens/exercises_screen.dart';
import 'package:summa_move/screens/about_screen.dart';

class MainDrawer extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Drawer(
      child: ListView(
        padding: EdgeInsets.zero,
        children: [
          DrawerHeader(
            decoration: BoxDecoration(
              color: Color(0xFF36257A),
            ),
            child: Text(
              'Menu',
              style: TextStyle(
                color: Colors.white,
                fontSize: 24,
              ),
            ),
          ),
          ListTile(
            title: Text('Home'),
            onTap: () {
              Navigator.of(context).pushReplacementNamed(HomeScreen.routeName);
            },
          ),
          ListTile(
            title: Text('Exercises'),
            onTap: () {
              Navigator.of(context)
                  .pushReplacementNamed(ExercisesScreen.routeName);
            },
          ),
          ListTile(
            title: Text('About'),
            onTap: () {
              Navigator.of(context)
                  .pushReplacementNamed(AboutScreen.routeName);
            },
          ),
        ],
      ),
    );
  }
}
