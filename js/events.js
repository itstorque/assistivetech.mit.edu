text_items = ["events-desc",
              "event-1-date", "event-1-time", "event-1-title", "event-1-location",
              "event-2-date", "event-2-time", "event-2-title", "event-2-location",
              "event-3-date", "event-3-time", "event-3-title", "event-3-location"];




function updateWinners(year) {

  document.getElementById('projectsArea').innerHTML = ""

  document.getElementById('moreProjectsArea').innerHTML = ""

  document.getElementById('yearLabel').innerHTML = year

  style = teamData[year+" Style"]

  winners = teamData[year+" Winners"]

  teams = teamData[year+" Teams"]

  teamMap = {}

  for (i = 0, len = teams.length; i < len; i++) {

    teamMap[teams[i]["id"]] = teams[i]

  }

  if (style == 1) {

    winnerData = [0,0,0,0,0,0]

    titles = []

    allTeamData = teamMap

    for (i = 0, len = winners.length; i < len; i++) {

      index = titles.indexOf(winners[i][0])*2;

      if (index < 0) {

        index = titles.length*2;

        titles.push(winners[i][0]);

      }

      if (winners[i][1]==2) { index+=1; }

      if (index < 6) {

        winnerData[index] = teamMap[winners[i][2]]

      } else {

        winnerData.push(teamMap[winners[i][2]])

      }

      delete allTeamData[winners[i][2]];

    }

    threeColumnWinners(year, winnerData, allTeamData)

  } else {

    winnerData = [0,0,0]

    for (i = 0, len = winners.length; i < len; i++) {

      rank = winners[i][0]

      winnerData[rank-1] = teamMap[winners[i][1]]

    }

    originalStyleWinners(year, winnerData)

  }

}

function threeColumnWinners(year, winnerData, allTeamData) {

  const tableHtml = '<table class="projectsTable"><thead><tr><th><img src="/resources/winners/collab.png"><h3>Co-Designer Collaboration</h3></th><th><img src="/resources/winners/tech.png"><h3>Technical Skills</h3></th><th><img src="/resources/winners/func.png"><h3>Functionality</h3></th></tr></thead></table>'

  firstPlaceWinners = ""

  for (var i = 0; i < 3; i++) {

    winner = winnerData[i*2]

    name = winner['Team Name']

    desc_short = winner['Project Description']

    desc = winner['Project Detail']

    desc += addDocumentationTag(winner)

    if ("image_append" in winner) {

      extendable_src_seq = winner['image_append']

    } else {

      extendable_src_seq = ""

    }

    win_cat = winner['Category']

    image_url = "ATHack " + year + "/_team" + name + extendable_src_seq

    firstPlaceWinners += '<td><div><img src="/resources/winners/first.png"><h3>Team '+name+'</h3></div><p class="desc">'+desc_short+'</p><br><p class="pressText" onclick="showDetail(this)" data-title="Team '+name+'" data-wincat="'+win_cat+'" data-winleague="1" data-desc="'+desc+'" data-img="/resources/images/albums/'+image_url+'.jpg">More Details</p></td>'

  }

  secondPlaceWinners = ""

  for (var i = 0; i < 3; i++) {

    winner = winnerData[i*2+1]

    name = winner['Team Name']

    desc_short = winner['Project Description']

    desc = winner['Project Detail']

    desc += addDocumentationTag(winner)

    if ("image_append" in winner) {

      extendable_src_seq = winner['image_append']

    } else {

      extendable_src_seq = ""

    }

    // HANDLE EXTRA WIN_CAT INPUT

    win_cat = winner['Category']

    image_url = "ATHack " + year + "/_team" + name + extendable_src_seq

    secondPlaceWinners += '<td><div><img src="/resources/winners/second.png"><h3>Team '+name+'</h3></div><p class="desc">'+desc_short+'</p><br><p class="pressText" onclick="showDetail(this)" data-title="Team '+name+'" data-wincat="'+win_cat+'" data-winleague="2" data-desc="'+desc+'" data-img="/resources/images/albums/'+image_url+'.jpg">More Details</p></td>'

  }

  var temp = document.getElementById('projectsArea');
  temp.innerHTML = tableHtml;
  var htmlObject = temp.firstChild;

  htmlObject.innerHTML += "<tbody><tr>"+firstPlaceWinners+"</tr><tr>"+secondPlaceWinners+"</tr></tbody>"

  if (winnerData.length > 6) {

    pastSection = ""

    for (i = 6, len = winnerData.length; i < len; i++) {

      data = winnerData[i]

      console.log(data)

      current_section = data["Category"]

      name = "Team " + data["Team Name"]

      desc = data["Project Detail"]

      if (desc.indexOf(name) == 0) {

        desc = desc.replace(name, "")

      }

      if (!desc.endsWith('.')) {

        desc += "."

      }

      extendable = data["image_append"]

      if (extendable == undefined) {

        extendable = ""

      }

      documentation_slip = ""

      if ('Documentation' in data) {

        documentation_slip = addDocumentationTag(data["Documentation"])

      }

      image_url = '/resources/images/albums/ATHack ' + year + '/_team' + data["Team Name"] + '.jpg'

      image_tag = "<img src='"+image_url+"' onerror=\"this.className='broken_link'\">"

      if (pastSection != current_section) {

        pastSection = current_section

        generateSectionTitle(current_section + " Award", 'moreProjectsArea')

      }

      addToSection(image_tag+'<p><b>'+name+'</b> '+desc+documentation_slip+'</p>', 'moreProjectsArea')

    }

  }

  generateSectionTitle("Other "+year+" Projects", 'moreProjectsArea')

  for (var key in allTeamData) {

    data = allTeamData[key]

    name = "Team " + data["Team Name"]

    desc = data["Project Detail"]

    if (desc.indexOf(name) == 0) {

      desc = desc.replace(name, "")

    }

    if (!desc.endsWith('.')) {

      desc += "."

    }

    extendable = data["image_append"]

    if (extendable == undefined) {

      extendable = ""

    }

    documentation_slip = ""

    if ('Documentation' in data) {

      documentation_slip = addDocumentationTag(data["Documentation"])

    }

    image_url = '/resources/images/albums/ATHack ' + year + '/_team' + data["Team Name"] + '.jpg'

    image_tag = "<img src='"+image_url+"' onerror=\"this.className='broken_link'\">"

    addToSection(image_tag+'<p><b>'+name+'</b> '+desc+documentation_slip+'</p>', 'moreProjectsArea')

  }

}

function originalStyleWinners(year, winnerData) {

  var temp = document.getElementById('projectsArea');
  temp.innerHTML = "<center></center>";
  var htmlObject = temp.firstChild;

  const positions = ['First', 'Second', 'Third']

  for (var i = 0; i < 3; i++) {

    winner = winnerData[i]

    pos = positions[i]

    name = winner['Team Name']

    desc_short = winner['Project Description']

    desc = winner['Project Detail']

    desc += addDocumentationTag(winner)

    if ("image_append" in winner) {

      extendable_src_seq = winner['image_append']

    } else {

      extendable_src_seq = ""

    }

    image_url = "ATHack " + year + "/_team" + name + extendable_src_seq

    htmlObject.innerHTML += '<div class="card"><img src="/resources/winners/'+pos.toLowerCase()+'.png" style="width: 170px;"><h2>'+pos+' Place</h2><h3>Team '+name+'</h3><p>'+desc_short+'</p><p class="pressText" onclick="showDetail(this)" data-title="Team '+name+'" data-wincat="ATHack '+year+'" data-winleague="1" data-desc="'+desc+'" data-img="/resources/images/albums/'+image_url+'.jpg">More Details</p></div>'

  }

}

function generateSectionTitle(title, section_id) {

  addToSection('<h2 class="centerOnSmall projectSection">'+title+'</h2>', section_id)

}

function addToSection(html, section_id) {

  document.getElementById(section_id).innerHTML += html

}

function addDocumentationTag(url) {

  if ("Documentation" in winner) {

    link = winner["Documentation"]

    linkData = getTitleOfPage(link)

    intro = linkData[0]

    linkName = linkData[1]

    return "<br><br>"+intro+" <a target='_blank' href='"+link+"'>"+linkName+"</a>"

  }

  return ""

}

function getTitleOfPage(externalUrl) {

  if (externalUrl.indexOf('github') > -1) {

    return ["Visit Their", "GitHub Page"]

  } else if (externalUrl.indexOf('instructables') > -1) {

    return ["Visit Their", "Instructables Page"]

  } else if (externalUrl.indexOf('docs.google.com') > -1) {

    return ["View Their", "Google Docs File"]

  } else if (externalUrl.indexOf('drive.google.com/file/') > -1) {

    return ["View Their", "Google Drive File"]

  } else if (externalUrl.indexOf('drive.google') > -1) {

    return ["View Their", "Google Drive"]

  } else {

    return ["Visit Their", "Web Page"]

  }

}

function showDetail(identifier) {

  title = $(identifier).data('title')
  cat = $(identifier).data('wincat')
  league = $(identifier).data('winleague')
  desc = $(identifier).data('desc')
  img = $(identifier).data('img')

  document.getElementById('popup').className = ''

  document.getElementById('pTitle').innerHTML = title
  document.getElementById('pDesc').innerHTML = desc

  document.getElementById('pImg').style.backgroundImage = 'url("' + img + '")'

  if (league == 1) {

    document.getElementById('pWin').innerHTML = "Project won <b>first</b> place in " + cat

  } else if (league == 2) {

    document.getElementById('pWin').innerHTML = "Project won <b>second</b> place in " + cat

  }

  resizePopup()

}

function resizePopup() {

  height = window.innerHeight;

  document.getElementById('pImg').style.height = (height - document.getElementById('pTextDetails').clientHeight - 180) + "px"

}

function fullScreenPopupImage() {

  elem = document.getElementById('pImg')

  elem2 = document.getElementById('enlarge')

  if (elem.className == "forceFullScreen") {

    elem.className = ""

    elem2.src = "/resources/icons/enlarge.svg"

  } else {

    elem.className = "forceFullScreen"

    elem2.src = "/resources/icons/close.svg"

  }

}

var onresize = function() {

  resizePopup()

}

window.addEventListener("resize", onresize);



function loadContent() {

  for (var i = 0; i < text_items.length; i++) {

    item_id = text_items[i];

    content = web_content[item_id];

    if (typeof content == "string") {

      content = content.replace("|", "\n\n");

    }

    $("#"+item_id).html(content);

  }

}