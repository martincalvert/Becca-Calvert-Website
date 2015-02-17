#!/usr/bin/env ruby
def run_search(hashy,file)
  f=File.open("../#{file}")
    f.each do |line|
      hashy.keys.each do |key|
        hashy[key] = hashy[key]+1 if line.include?("<#{key} ") || line.include?("<#{key}>")
        hashy[key] = hashy[key]-1 if line.include?("</#{key}>")
      end
    end
  hashy
end

def test_count(tem,hea,foo)
  tem.each do |k,v|
    return k unless (tem[k] + hea[k] +  foo[k]) == 0
  end
  true
end

files = Dir.entries('../')
head = foot = temp = {'div' => 0,'html' => 0,'ul' => 0, 'head' => 0, 'a' => 0, 'li' => 0, 'table' => 0, 'tr' => 0, 'thead' => 0, 'td' => 0, 'tbody' => 0}

head = run_search(head,'head.php')
foot = run_search(foot,'footer.php')

files.each do |file|
  if !['head.php','footer.php'].include? file
    if ['.php','html'].include? File.extname(file)
      temp = run_search(temp,file)
      test = test_count(temp,head,foot)
      unless test == true
        puts "Unbalanced #{test} tags in #{file}"
      	return false
      end
    end
  end
end
