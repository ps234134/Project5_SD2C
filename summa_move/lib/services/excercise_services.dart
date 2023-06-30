import 'package:summa_move/models/excercise.dart';
import 'dart:convert';
import 'package:http/http.dart' as http;

class ExcerciseService {
  static const String baseUrl = 'http://10.0.2.2:8000/api/exercises/';

  Future<List<Exercise>> getAll(String taal) async {
    print('In ExcerciseService getAll 1');
    print('$baseUrl$taal');

    List<Exercise> exercises = [];
    final response =
    await http.get(Uri.parse('$baseUrl$taal'));
    print('In ExcerciseService getAll 2: ${response.statusCode}');

    if (response.statusCode != 200) {
      throw Exception(
          'Fout bij het ophalen van alle excercises (${response.statusCode}).');
    }

    final List<dynamic> data = jsonDecode(response.body);

    for (int i = 0; i < data.length; i++) {
      print('In ExcerciseService getAll 3: ${data[i]}');

      final excercise = Exercise(
          name: data[i]['name'],
          description: taal == 'dutch' ? data[i]['description_nld'] : data[i]['description_eng'],
          imagePath: data[i]['img']
      );
      exercises.add(excercise);
    }

    return exercises;
  }

}
