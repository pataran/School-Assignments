
monster1 = {:health => 500}
monster2 = {:health => 500}

for i in (1..5)

monster1damage = rand(1..100)
monster2damage = rand(1..100)
monster1[:health] = monster1[:health] - monster2damage

monster2[:health] = monster2[:health] - monster1damage


puts "ROUND #{i}"
puts "Monster1 attacks monster 2 with #{monster1damage} damage"
puts "Monster2's health is now at #{monster2[:health]}"
puts "Monster2 attacks monster 1 with #{monster2damage} damage"
puts "Monster1's health is now at #{monster1[:health]}"
puts "_________________"
	if monster1[:health] > monster2[:health] && i == 5
		puts "Monster1 wins all the glory and bitches!"

		elsif monster1[:health] < monster2[:health] && i == 5
		puts "Monster2 wins the delusional masses!!"
	end
end