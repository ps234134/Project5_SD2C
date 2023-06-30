import 'package:flutter/material.dart';
import 'package:summa_move/widgets/main_drawer.dart';

class AboutScreen extends StatelessWidget {
  static const routeName = '/about';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('About'),
      ),
      drawer: MainDrawer(),
      body: Center(
        child: Text('About Screen'),
      ),
    );
  }
}
