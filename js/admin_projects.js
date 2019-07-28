function saveChanges(object) {

  var json = JSON.stringify(object);



}

function loadJSON(year) {

  // teamData is the raw JSON imported from PHP! It will be used to write to /teams.json

  style = teamData[year+" Style"]

  winners = teamData[year+" Winners"]

  teams = teamData[year+" Teams"]

  teamMap = {}

  for (i = 0, len = teams.length; i < len; i++) {

    teamMap[teams[i]["id"]] = teams[i]

  }

  return [teamData, teamMap]

}

function appendProjectToYear(name, desc, detail, category, place, useTable, photo, year) {

  [item, map] = loadJSON(year)

  id = Number(Object.keys(map).reduce(function(a, b){ return map[a] > map[b] ? a : b }));

  appendable = ""

  if (place == 0) { category = "" } else {

    win_item = [place, id]

    if (category != "") {

      win_item.unshift(category)

    }

    item = appendObjectToKey(win_item, year+" Winners", item)

  }

  if (Math.floor((id+1)/100) > Math.floor(id/100)) {

    alert("ERROR ID Out Of Bound "+id)

  }

  for (i = 0, len = teams.length; i < len; i++) {

    if (name == teams[i]["Team Name"]) {

      appendable = "_" + id

    }

  }

  object =
  { "Team Name": name,
    "Project Description": desc,
    "Project Detail": detail,
    "Category": category,
    "Place": place,
    "Use Table": useTable,
    "image_append": appendable,
    "id": id+1 }

  item = appendObjectToKey(object, year+" Teams", item)

  console.log(item)

}

appendProjectToYear("Zary", "desc", "detail", "car", "pl", true, "", 2019)

function appendObjectToKey(object, key, json) {

  json[key].push(object)

  return json

}
