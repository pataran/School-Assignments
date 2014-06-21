puts "hello"
puts "codingdojo"
puts "idiot"

print "hello"
print "coding"

BEGIN {

	puts "this is in the begin block"
}

END {

	puts "this is in the end block"
}

x = 5
y = 10
z = x + y

puts z

first_name = "patrick"
last_name = "gandolfo"
puts "Your name is #{first_name} and last name is #{last_name}"


z= 50

puts "The value of #{z}"

puts "\t\tI am\n 5'8\" tall"

class CodingDojo
	@@no_of_branches = 0;

def initialize(id, name, address)
	@branch_id = id
	@branch_name = name
	@branch_address = address
	@@no_of_branches == 1
	puts "\nCreated Branch #{@@no_of_branches}"
end

def hello
	puts "hello codingdojo!"
end

def displayALL
	puts "Branch ID: %d" % @branch_id
	puts "Branch Name: %s" % @branch_name
	puts "Branch Address: %s" % @branch_address
end
end

branch = CodingDojo.new(253, "SF CodingDojo", "Sunnyvale")
branch.displayALL
branch2 = CodingDojo.new(155, "SF Boston CodingDojo", "Boston")
branch2.displayALL

for i in 0...10
	puts "Value of local variable is #{i}"

	puts "i is now 3!!!" if i==3

end




