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

  void toggleTaal() {
    setState(() {
      _taal = _taal == 'dutch' ? 'eng' : 'dutch';
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Exercises'),
      ),
      drawer: MainDrawer(),
      body: Column(
        children: [
          GestureDetector(
            onTap: toggleTaal,
            child: Image.asset(
              _taal == 'dutch' ? 'assets/images/dutch_flag.png' : 'assets/images/english_flag.png',
              height: 50,
              width: 50,
            ),
          ),
          Expanded(
            child: FutureBuilder<List<Exercise>>(
              future: ExcerciseService().getAll(_taal),
              builder: (context, snapshot) {
                if (snapshot.connectionState == ConnectionState.waiting) {
                  return Center(
                    child: CircularProgressIndicator(),
                  );
                } else if (snapshot.hasError) {
                  return Center(
                    child: Text('Error: ${snapshot.error}'),
                  );
                } else {
                  return ListView.builder(
                    itemCount: snapshot.data!.length,
                    itemBuilder: (context, index) {
                      return ListTile(
                        title: Text(snapshot.data![index].name),
                        onTap: () {
                          Navigator.push(
                            context,
                            MaterialPageRoute(
                              builder: (context) => _ExerciseDetailScreen(exercise: snapshot.data![index]),
                            ),
                          );
                        },
                      );
                    },
                  );
                }
              },
            ),
          ),
        ],
      ),
    );
  }
}

class _ExerciseDetailScreen extends StatelessWidget {
  final Exercise exercise;

  const _ExerciseDetailScreen({required this.exercise});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(exercise.name),
      ),
      body: SingleChildScrollView(
        padding: EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text('Workout:', style: Theme.of(context).textTheme.headline6),
            SizedBox(height: 8),
            Text(exercise.name),
            SizedBox(height: 16),
            Text('Instructions:', style: Theme.of(context).textTheme.headline6),
            SizedBox(height: 8),
            Text(exercise.description),
          ],
        ),
      ),
    );
  }
}
