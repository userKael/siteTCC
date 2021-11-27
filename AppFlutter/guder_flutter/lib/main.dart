import 'package:flutter/material.dart';

void main() {
  runApp(gudersaude());
}

class gudersaude extends StatefulWidget {
  @override
  _gudersaudeState createState() => _gudersaudeState();
}

class _gudersaudeState extends State<gudersaude> {
  get child => null;

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        drawer: gudersaude(),
        appBar: AppBar(
          title: Text("Guder Saude"),
          actions: [
            CircleAvatar(
              child: Image.asset(''),
              radius: 25,
            ),
          ],
        ),
        body: Container(
          color: Colors.lightBlue.shade100,
          width: double.maxFinite,
          height: 900,
          child: Column(
            children: [
              Container(
                child: Center(
                  child: Text("!",
                      style: TextStyle(color: Colors.lightBlue, fontSize: 45)),
                ),
                width: 700,
                height: 200,
                color: Colors.transparent,
              ),
              Container(
                width: double.maxFinite,
                height: 150,
              ),
               Container(
                width: double.infinity,
                height: 50,
                child: Column(
                  children: [
                    Container(
                      child: Text("Nome",
                          style: TextStyle(
                            color: Colors.lightBlue,
                            fontSize: 25,
                          )),
                      width: 200,
                      height: 50,
                      color: Colors.white70,
                    ),
                  ],
                ),
              ),
              Container(
                width: double.infinity,
                height: 50,
                child: Column(
                  children: [
                    Container(
                      child: Text("Email",
                          style: TextStyle(
                            color: Colors.lightBlue,
                            fontSize: 25,
                          )),
                      width: 200,
                      height: 50,
                      color: Colors.white70,
                    ),
                  ],
                ),
              ),
              Container(
                width: double.maxFinite,
                height: 45,
              ),
              Container(
                width: double.infinity,
                height: 50,
                child: Column(
                  children: [
                    Container(
                      child: Text("Senha",
                          style: TextStyle(
                            color: Colors.lightBlue,
                            fontSize: 25,
                          )),
                      width: 200,
                      height: 50,
                      color: Colors.white70,
                    ),
                  ],
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
