function graphScores(labelsScores, listeScores) {
  new Chart(document.getElementById("scores"), {
    type: 'line',
    data: {
      labels: labelsScores
      datasets: [{
        data: listeScores,
        label: "Score",
        borderColor: "#5d5fc6",
        fill: false
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Scores au fil des tests'
      }
    }
  });
}

function graphCardiaque(labelsCardiaque, listeCardiaque) {
  new Chart(document.getElementById("cardiaque"), {
    type: 'line',
    data: {
      labels: labelsCardiaque
      datasets: [{
        data: listeCardiaque,
        label: "Rythme cardiaque",
        borderColor: "#5d5fc6",
        fill: false
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Rythme cardiaque moyen au fil des tests'
      }
    }
  });
}

function graphTemp(labelsTemp, listeTemp) {
  new Chart(document.getElementById("cardiaque"), {
    type: 'line',
    data: {
      labels: labelsTemp
      datasets: [{
        data: listeTemp,
        label: "Température",
        borderColor: "#5d5fc6",
        fill: false
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Température moyenne au fil des tests'
      }
    }
  });
}

function graphReaction(labelsReaction, listeReaction) {
  new Chart(document.getElementById("cardiaque"), {
    type: 'line',
    data: {
      labels: labelsReaction
      datasets: [{
        data: listeReaction,
        label: "Temps de réaction,
        borderColor: "#5d5fc6",
        fill: false
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Temps de réaction moyen au fil des tests'
      }
    }
  });
}
