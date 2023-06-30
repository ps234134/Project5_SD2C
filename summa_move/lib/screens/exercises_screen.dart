import 'package:flutter/material.dart';
import 'package:summa_move/models/excercise.dart';
import 'package:summa_move/services/excercise_services.dart';
import 'package:summa_move/widgets/main_drawer.dart';

class ExercisesScreen extends StatefulWidget {

  @override
  State<ExercisesScreen> createState() => _ExercisesScreenState();
}

class _ExercisesScreenState extends State<ExercisesScreen> {
  String _taal = 'dutch';

  void toggleTaal(){
    setState(() {
      if (_taal == 'dutch'){
        _taal = 'eng';
      } else {
        _taal = 'dutch';
      }
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Exercises'),
      ),
      drawer: MainDrawer(),
      body: FutureBuilder<List<Exercise>>(
        future: ExcerciseService().getAll(_taal),
        builder: (context, snapshot) {
          if (snapshot.hasError) {
            return Center(child: Text(snapshot.error.toString()));
          }
          if (!snapshot.hasData){
            return Center(child: CircularProgressIndicator());
          }
          return ListView.builder(
              itemCount: snapshot.data!.length,
            itemBuilder: (context, index) {
              return ListTile(
                title: Text(snapshot.data![index].name),
                // leading: Image.network(snapshot.data![index].imagePath, width: 50),
              );
            },
          );
        },
      )
    );
  }
}


class ExerciseDetailScreen extends StatelessWidget {
  final Exercise exercise;

  ExerciseDetailScreen({required this.exercise});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(exercise.name),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Image.asset(exercise.imagePath),
            SizedBox(height: 10),
            Text(exercise.name),
          ],
        ),
      ),
    );
  }
}
