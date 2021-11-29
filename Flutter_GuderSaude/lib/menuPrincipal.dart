import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class MenuPrincipal extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Drawer(
      child: Material(
        color: Colors.blue.shade900,
        child: ListView(
          padding: EdgeInsets.symmetric(horizontal: 20),
          children: [
            const SizedBox(
              height: 10,
            ),
            cabecalho(
              nome: "Kael Alves Sousa",
              email: "Kael@kael.com",
              imagem:
                  "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png",
            ),
            const SizedBox(
              height: 10,
            ),
            Divider(
              color: Colors.green[900],
            ),
            const SizedBox(
              height: 10,
            ),
            menuItem(
              texto: "Principal",
              icone: Icons.home,
            ),
            const SizedBox(
              height: 10,
            ),
            menuItem(
              texto: "Gerenciar Cadastros",
              icone: Icons.people_alt_rounded,
            ),
            const SizedBox(
              height: 10,
            ),
            menuItem(texto: "Textos Dos Resultados", icone: Icons.wrap_text),
            const SizedBox(
              height: 15,
            ),
            Divider(
              color: Colors.green[900],
            ),
            const SizedBox(
              height: 270,
            ),
            menuItem(texto: "Sobre nós", icone: Icons.person),
          ],
        ),
      ),
    );
  }

  menuItem({required String texto, required IconData icone}) {
    return ListTile(
      leading: Icon(icone, color: Colors.white),
      title: Text(
        texto,
        style: TextStyle(color: Colors.white),
      ),
    );
  }

  cabecalho(
          {required String nome,
          required String email,
          required String imagem}) =>
      InkWell(
        child: Row(
          children: [
            CircleAvatar(
              radius: 30,
              backgroundImage: NetworkImage(imagem),
            )
          ],
        ),
      );
}
