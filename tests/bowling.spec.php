<?php
class Bowling
{
    public $score = 0;

    public function hit($pins)
    {
    }
}

describe "Bowling"
  describe "#score"
    it "returns 0 for all gutter game"
      $bowling = new Bowling;
      for ($i = 1; $i <= 20; $i++) {
        $bowling->hit(0);
      }
      $bowling->score should equal 0
    end
  end
end

describe "Bowling#score"
  it "returns 0 for all gutter game"
    $bowling = new Bowling;
    array_filter(range(0, 19), function() use($bowling){ $bowling->hit(0); } );
    $bowling->score should equal 0
  end
end

describe "Bowling#score"
  context "all gutter game"
    subject
      $bowling = new Bowling;
      array_filter(range(0, 19), function() use($bowling) { $bowling->hit(0); } );
      return $bowling->score;
    end
    it "returns 0"
      should equal 0
    end
  end
end
