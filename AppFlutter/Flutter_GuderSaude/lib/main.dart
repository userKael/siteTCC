import 'package:flutter/material.dart';

import 'loginPage.dart';

void main() => runApp(MyApp());
 
 class MyApp extends StatelessWidget {
  
  @override
  
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Gudersaude',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        primarySwatch: Colors.indigo,  
      ),
      home: loginPage(),
    );
  }


 }
