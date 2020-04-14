<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>

<body>
  <div id="app">
    <template>
      <v-app-bar absolute color="#fcb69f" dark shrink-on-scroll src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg" scroll-target="#scrolling-techniques-2">
        <template v-slot:img="{ props }">
          <v-img v-bind="props" gradient="to top right, rgba(19,84,122,.5), rgba(128,208,199,.8)"></v-img>
        </template>

        <v-app-bar-nav-icon>
          <v-chip href="index.php" class="ma-2" color="primary" outlined pill>
            <v-icon color="white">mdi-home</v-icon>
          </v-chip>
        </v-app-bar-nav-icon>

        <v-toolbar-title>Crud Vuetify & Php</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-chip href="agregarUser.php" class="ma-2" color="#396afc" text-color="white" outlined pill>Registrar
          <v-icon color="#396afc">mdi-account-plus</v-icon>
        </v-chip>

        <v-chip href="listUser.php" class="ma-2" color="#26a0da" text-color="white" outlined pill>Listado
          <v-icon color="#26a0da">mdi-clipboard-account</v-icon>
        </v-chip>

        <v-chip href="editarUser.php" class="ma-2" color="#ff7e5f" text-color="white" outlined pill>Actualizar
          <v-icon color="#ff7e5f">mdi-account-convert</v-icon>
        </v-chip>

        <v-chip href="eliminarUser.php" class="ma-2" color="#dc2430" text-color="white" outlined pill>Eliminar
          <v-icon color="#dc2430">mdi-account-remove</v-icon>
        </v-chip>

        <v-chip href="reporteUser.php" class="ma-4" color="#667db6" text-color="white" outlined pill>Reporte
          <v-icon color="#667db6">mdi-chart-areaspline</v-icon>
        </v-chip>

      </v-app-bar>
      <v-sheet id="scrolling-techniques-2" class="overflow-y-auto">
        <v-container style="height: 130px;">

        </v-container>
      </v-sheet>
    </template>
  </div>
</body>