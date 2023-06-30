import 'package:flutter/material.dart';
import 'package:summa_move/screens/home_screen.dart';
import 'package:summa_move/screens/exercises_screen.dart';
import 'package:summa_move/screens/login_screen.dart';
import 'package:summa_move/api/user_api.dart';

import '../classes/User.dart';

class MainDrawer extends StatefulWidget {
  @override
  _MainDrawerState createState() => _MainDrawerState();
}

class _MainDrawerState extends State<MainDrawer> {
  bool isDutchLanguage = true;
  bool isLoggedIn = false; // Add isLoggedIn variable

  @override
  void initState() {
    super.initState();
    checkLoginStatus(); // Call the function to check login status
  }

  void checkLoginStatus() {
    bool loggedIn = User.loggedIn;
    setState(() {
      isLoggedIn = loggedIn;
    });
  }
  void toggleLanguage() {
    setState(() {
      isDutchLanguage = !isDutchLanguage;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Drawer(
      child: Column(
        children: [
          DrawerHeader(
            decoration: BoxDecoration(
              color: Color(0xFF36257A),
            ),
            child: Column(
              children: [
                Image.asset(
                  'assets/images/logo.png',
                  width: 400,
                  height: 100,
                ),
                SizedBox(height: 1),
                Text(
                  'Summa Move',
                  style: TextStyle(
                    color: Colors.white,
                    fontSize: 20,
                  ),
                ),
              ],
            ),
          ),
          ListTile(
            title: Text(
              'Home',
              style: TextStyle(
                color: Color(0xFFD41D84),
                fontSize: 20,
              ),
            ),
            onTap: () {
              Navigator.of(context).pushReplacementNamed(HomeScreen.routeName);
            },
          ),
          ListTile(
            title: Text(
              'Exercises',
              style: TextStyle(
                color: Color(0xFFD41D84),
                fontSize: 20,
              ),
            ),
            onTap: () {
              Navigator.of(context).push(
                MaterialPageRoute(
                    builder: (context) => ExercisesScreen(),)
              );
            },
          ),
          ListTile(
            title: Text(
              'About',
              style: TextStyle(
                color: Color(0xFFD41D84),
                fontSize: 20,
              ),
            ),
            onTap: () {
              showAboutDialog(
                context: context,
                applicationName: 'Summa Move',
                applicationVersion: '0.0.1',
                applicationIcon: Image.asset(
                  'assets/images/logo_2.jpg',
                  width: 64,
                  height: 64,
                ),
                children: [
                  Text('This app was created by Kinga Wullems.'),
                ],
              );
            },
          ),
          ListTile(
            title: Text(
              isLoggedIn ? 'Logout' : 'Login', // Change the label based on login status
              style: TextStyle(
                color: Color(0xFFD41D84),
                fontSize: 20,
              ),
            ),
            onTap: () {
              if (isLoggedIn) {
                UserAPI.logout(context);
              } else {
                Navigator.of(context).pushReplacementNamed(LoginScreen.routeName);
              }
            },
          ),
          Expanded(
            child: Align(
              alignment: Alignment.bottomCenter,
              child: Padding(
                padding: const EdgeInsets.all(16.0),
                child: GestureDetector(
                  onTap: toggleLanguage,
                  child: isDutchLanguage
                      ? Image.asset(
                    'assets/images/dutch_flag.png',
                    width: 50,
                    height: 30,
                  )
                      : Image.asset(
                    'assets/images/english_flag.png',
                    width: 50,
                    height: 30,
                  ),
                ),
              ),
            ),
          ),
        ],
      ),
    );
  }
}