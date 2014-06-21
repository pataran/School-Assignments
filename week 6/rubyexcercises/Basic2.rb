
def addarray(array)

array2 = array.select { |i| i > 10}
	puts array2
	sum = 0
	array2.each do |i|
		sum += i
	end
	puts "The total sum is #{sum}"
end
addarray([3,5,1,2,7,9,8,13,25,32])


def namereturner(names)
	names.shuffle
	names.each do |i|
	 	if i.length >= 5
	 	puts i + "\n"
		end
	end
end
namereturner(["John", "KB", "Oliver", "Mathew", "Christopher"])


def vowelfinder()
	alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"]
	vowels = ["a","e","i","o","u","y"]
	shuffled = alphabet.shuffle
	puts shuffled.first
	puts shuffled.last

	vowels.each do |i|

		if i  == shuffled.first
			puts "Starts with a vowel"
		end
	end
end
vowelfinder()

# def randomnum()
# 	array = [];
# 	for i in (1..10)
# 		rand_number = rand(55..100)
# 		randomarray = array.push(rand_number)
# 	end
# puts randomarray
# end
# randomnum()


def randomnumsort()

	array = [];
	for i in (1..10)
		rand_number = rand(55..100)
		randomarray = array.push(rand_number)
	end

	sort = randomarray.sort
	puts sort
	smallestnum = sort.first
	largestnum = sort.last
	puts "smallest num is #{smallestnum} and largest is #{largestnum}"
end
randomnumsort()


def gen_random_string()
	array = []
	for i in (1..5)
	randcharacter = (65 + rand(26)).chr
	# puts randcharacter
	randstringarray = array.push(randcharacter)
	end
	stringify = randstringarray.join('').to_s 
	return stringify

end


gen_random_string()

def gen_random_string2(n)
	array = []

	n.times do |i|

		array[i] = gen_random_string()

	end

puts array


end
gen_random_string2(10)










