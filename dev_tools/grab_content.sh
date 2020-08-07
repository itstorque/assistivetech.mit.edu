# This is a script that updates content files from the live website
# It is meant for getting a preview locally of the data that is uploaded onto
# the live site.

# Edit DEVELOP.md when you change any of the files in this list
files=("content.json" "teams.json")

save_path="./";

if [ "${PWD##*/}" = "dev_tools" ]; then
  save_path="../";
fi

for filename in ${files[@]}; do
  echo "Updating $filename..."
  curl "http://assistivetech.mit.edu/$filename" --output "$save_path$filename"
done
