

def calcnums(first_number,second_number)
# puts first_number + second_number
operator = rand(1..4)

if operator == 1

	operator = :+

elsif operator == 2

	operator = :-

elsif operator == 3

	operator = :/

elsif operator == 4 

	operator = :*

end
	answer = first_number.send(operator, second_number)
	#answer = first_number  + operator + second_number
	puts "The answer  of #{first_number} #{operator} #{second_number} is #{answer}"
end

calcnums(12,4)